# Configuration Reference

There are 3 paramaters in the configuration of the Doctrine encryption bundle which are all optional.

* **secret_key** - The key used to encrypt the data (256 bit)
    * 32 character long string
    * Default: empty, the bundle will use your Symfony2 secret key.

* **encryptor** - The encryptor used to encrypt the data
    * Encryptor name, currently available: AEADxChaCha20Poly1305
    * Default: AEADxChaCha20Poly1305

* **encryptor_class** - Custom class for encrypting data
    * Encryptor class, [your own encryptor class](https://github.com/integralservice/DoctrineEncryptBundle/blob/master/Resources/doc/custom_encryptor.md) will override encryptor paramater
    * Default: empty
    
## yaml

``` yaml
integralservice_doctrine_encrypt:
    secret_key:           AB1CD2EF3GH4IJ5KL6MN7OP8QR9ST0UW                                      # Your own random 256 bit key (32 characters)
    encryptor:            AEADxChaCha20Poly1305                                                 # AEADxChaCha20Poly1305Encryptor
    encryptor_class:      \IntegralService\DoctrineEncryptBundle\Encryptors\AEADxChaCha20Poly1305Encryptor # your own encryption class
```

## xml

``` xml 
<integralservice_doctrine_encrypt:config>
        <!-- Your own random 256 bit key (32 characters) -->
        <integralservice_doctrine_encrypt:secret_key>AB1CD2EF3GH4IJ5KL6MN7OP8QR9ST0UW</integralservice_doctrine_encrypt:secret_key>
        <!-- AEADxChaCha20Poly1305 -->
        <integralservice_doctrine_encrypt:encryptor>AEADxChaCha20Poly1305</integralservice_doctrine_encrypt:encryptor>
        <!-- your own encryption class -->
        <integralservice_doctrine_encrypt:encryptor_class>\IntegralService\DoctrineEncryptBundle\Encryptors\AEADxChaCha20Poly1305Encryptor</integralservice_doctrine_encrypt:encryptor_class>
</integralservice_doctrine_encrypt:config>
```

# Usage

Read how to use the database encryption bundle in your project.

[Usage](https://github.com/integralservice/DoctrineEncryptBundle/blob/master/Resources/doc/usage.md)