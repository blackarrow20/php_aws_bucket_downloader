### README

This is console application that allows us insight into S3 bucket, allows detailed preview of files within it, and allows us to download those files. Do not open app in browser, but in the console! It is tested to work fine with Amazon S3, Google Cloud S3, BackBlaze.
 
The application is tested only with PHP 7.4.26.
First copy s3config_example.php and name it "s3config.php". 
Then open "s3config.php" and edit its variables according to your needs. 
Configure your environment variables so that "php -v" command works from console.
Enter this command to see which options you have:
`php downloader.php -h`
It will print:
`php downloader.php -h` // to print this help
`php downloader.php -p` // print info about each object in bucket
`php downloader.php -d` // download all files from bucket to local folder