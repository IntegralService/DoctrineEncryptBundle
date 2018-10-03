<?php

use IntegralService\DoctrineEncryptBundle\Encryptors\AEADxChaCha20Poly1305Encryptor;

/**
 * AEADxChaCha20Poly1305EncryptorTest
 *
 * @author Julien Rouvier <julien@integral-service.fr>
 */
class AEADxChaCha20Poly1305EncryptorTest extends PHPUnit\Framework\TestCase
{

    /**
     * Test string encryption with AEADxChaCha20Poly1305Encryptor
     *
     * We encrypt a string and test that the result is different from
     * the original string. Then, the encrypted string is descrypted and
     * compared to the original string: the must be equal
     */
    public function testEncryptAndDecrypt()
    {
        $testString = "This string will be encrypted and then decrypted to test that the encryptor works properly";
        $secretKey = "THISISOURSECRETKEYANDITIS32BITS!";

        $encryptor = new AEADxChaCha20Poly1305Encryptor($secretKey);

        $encryptedString = $encryptor->encrypt($testString);

        $this->assertNotNull($encryptedString);
        $this->assertNotFalse($encryptedString);
        $this->assertNotEquals($testString, $encryptedString);
        $this->assertGreaterThanOrEqual(strlen($testString), strlen($encryptedString));

        $decryptedString = $encryptor->decrypt($encryptedString);

        $this->assertEquals($testString, $decryptedString);
    }
}
