# php-public-key-cryptography-implementation
small php snippet to generate private-public key pair and encrypt and decrypt data

1. Generate Private Key - Public Key pair
	<pre>php generate_keys.php</pre>

	This will generate two files namely private and public in the root directory

2. Benchmark Encryption and Decryption timings
	<pre>php index.php</pre>
	This will take the sample file with around 1000 email addresses (emails.php) and encrypt the emails one-by-one and then decrypt the same while benchmarking the timings.


