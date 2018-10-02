<?php

/**
 * AEADxChaCha20Poly1305EncryptorTest
 *
 * @author Julien Rouvier <julien@integral-service.fr>
 */
class AEADxChaCha20Poly1305EncryptorTest extends PHPUnit\Framework\TestCase
{
    public function testEncryptAndDecrypt()
    {
        $testString = "This string will be encrypted and then decrypted to test that the encryptor works properly";
        $secretKey = "THISISOURSECRETKEYANDITIS32BITS!";

        $encryptor = new \IntegralService\DoctrineEncryptBundle\Encryptors\AEADxChaCha20Poly1305Encryptor($secretKey);

        $encryptedString = $encryptor->encrypt($testString);

        $this->assertNotNull($encryptedString);
        $this->assertNotFalse($encryptedString);
        $this->assertNotEquals($testString, $encryptedString);
        $this->assertGreaterThanOrEqual(strlen($testString), strlen($encryptedString));

        $decryptedString = $encryptor->decrypt($encryptedString);

        $this->assertEquals($testString, $decryptedString);
    }
}
