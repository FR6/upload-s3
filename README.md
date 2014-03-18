upload-s3
=========

Simple form allowing to upload a file directly to Amazon S3 service without passing by our server.

# Installation

- In Amazon S3 console ( https://console.aws.amazon.com/s3 ), select your bucket and add CORS configuration:

	<?xml version="1.0" encoding="UTF-8"?>
	<CORSConfiguration xmlns="http://s3.amazonaws.com/doc/2006-03-01/">
	    <CORSRule>
	        <AllowedOrigin>*</AllowedOrigin>
	        <AllowedMethod>GET</AllowedMethod>
	        <AllowedMethod>PUT</AllowedMethod>
	        <AllowedHeader>*</AllowedHeader>
	    </CORSRule>
	</CORSConfiguration>

- Edit `config.php` file with your Amazon S3 account infos
- Copy files to your hosting
