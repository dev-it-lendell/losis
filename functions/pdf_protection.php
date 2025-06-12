<?php
class PDF_Protection extends FPDF
{
  protected $encrypted = false;
  protected $Uvalue;
  protected $Ovalue;
  protected $Pvalue;
  protected $enc_obj_id;
  protected $last_rc4_key;

  function SetProtection($permissions = array(), $user_pass = '', $owner_pass = null)
  {
    $options = array('print' => 4, 'modify' => 8, 'copy' => 16, 'annot-forms' => 32);
    $protection = 0xFFFFFFFC; // base mask denying permissions
    foreach ($permissions as $permission) {
      if (!isset($options[$permission])) {
        $this->Error('Incorrect permission: ' . $permission);
      } else {
        $protection &= ~$options[$permission];  // Clear bit to allow permission
      }
    }
    if ($owner_pass === null)
      $owner_pass = uniqid(rand());

    $this->encrypted = true;
    $this->_generateencryptionkey($user_pass, $owner_pass, $protection);

    // Reset RC4 cache after key change
    $this->last_rc4_key = null;
  }



  function _putstream($s)
  {
    if ($this->encrypted)
      $s = $this->_RC4($this->_objectkey($this->n), $s);
    parent::_putstream($s);
  }

  function _textstring($s)
  {
    if (!$this->encrypted)
      return parent::_textstring($s);
    return '(' . $this->_escape($this->_RC4($this->_objectkey($this->n), $s)) . ')';
  }

  function _putresources()
  {
    parent::_putresources();
    if ($this->encrypted) {
      $this->_newobj();
      $this->enc_obj_id = $this->n;
      $this->_out('<</Filter /Standard /V 1 /R 2 /O ' . $this->_hex($this->Ovalue) .
        ' /U ' . $this->_hex($this->Uvalue) . ' /P ' . $this->Pvalue . '>>');
      $this->_out('endobj');
    }
  }

  function _puttrailer()
  {
    parent::_puttrailer();
    if ($this->encrypted) {
      $this->_out('/Encrypt ' . $this->enc_obj_id . ' 0 R');
      $this->_out('/ID [' . $this->_hex($this->_fileid) . $this->_hex($this->_fileid) . ']');
    }
  }

  function _RC4($key, $text)
  {
    if ($this->last_rc4_key != $key) {
      $k = str_repeat($key, ceil(256 / strlen($key)));
      $k = substr($k, 0, 256); // 🔐 FIX: ensure exactly 256 bytes

      $rc4 = range(0, 255);
      $j = 0;
      for ($i = 0; $i < 256; $i++) {
        $t = $rc4[$i];
        $j = ($j + $t + ord($k[$i])) % 256;
        $rc4[$i] = $rc4[$j];
        $rc4[$j] = $t;
      }

      $this->last_rc4_key = $key;
      $this->rc4 = $rc4;
    } else {
      $rc4 = $this->rc4;
    }

    $a = 0;
    $b = 0;
    $out = '';
    for ($i = 0; $i < strlen($text); $i++) {
      $a = ($a + 1) % 256;
      $b = ($b + $rc4[$a]) % 256;
      $t = $rc4[$a];
      $rc4[$a] = $rc4[$b];
      $rc4[$b] = $t;
      $k = $rc4[($rc4[$a] + $rc4[$b]) % 256];
      $out .= chr(ord($text[$i]) ^ $k);
    }
    return $out;
  }


  function _objectkey($n)
  {
    return substr($this->_encryption_key, 0, 5) . pack('V', $n) . pack('V', 0);
  }

  function _generateencryptionkey($user_pass, $owner_pass, $protection)
  {
    // Pad the user password to 32 bytes (required by PDF spec)
    $user_pass = substr(
      $user_pass . str_repeat(
        "\x28\xBF\x4E\x5E\x4E\x75\x8A\x41" .
          "\x64\x00\x4E\x56\xFF\xFA\x01\x08" .
          "\x2E\x2E\x00\xB6\xD0\x68\x3E\x80" .
          "\x2F\x0C\xA9\xFE\x64\x53\x69\x7A",
        32
      ),
      0,
      32
    );

    $this->_fileid = md5(uniqid(rand(), true), true);
    $owner_rc4_key = substr(md5($owner_pass, true), 0, 5);
    $this->Ovalue = $this->_RC4($owner_rc4_key, $user_pass);
    $tmp = md5($user_pass . $this->Ovalue . chr($protection) . $this->_fileid, true);
    $this->last_rc4_key = null;
    $this->_encryption_key = substr($tmp, 0, 5);
    $this->Uvalue = $this->_RC4($this->_encryption_key, $this->_fileid);
    $this->Pvalue = - (($protection ^ 255) + 1);
  }



  function _hex($str)
  {
    return '<' . bin2hex($str) . '>';
  }
}