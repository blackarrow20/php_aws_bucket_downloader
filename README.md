### README

This is console application that allows us insight into S3 bucket, allows detailed preview of files within it, and allows us to download or remove those files. Do not open app in browser, but in the console! It is tested to work fine with Amazon S3, Google Cloud S3, BackBlaze.<br>
<br>
The application is tested only with PHP 7.4.26.<br>
First copy s3config_example.php and name it "s3config.php".<br>
Then open "s3config.php" and edit its variables according to your needs.<br>
Configure your environment variables so that "php -v" command works from console.<br>
Enter this command to see which options you have:<br>
`php downloader.php -h`<br>
It will print:<br>
`php downloader.php -h` // to print this help<br>
`php downloader.php -p` // print info about each object in bucket or its subfolder/prefix<br>
`php downloader.php -d` // download all files from bucket or subfolder/prefix to local folder<br>
`php downloader.php -r` // remove all files from a bucket or its subfolder/prefix<br>
