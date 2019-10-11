create_csv.php is a script you run in the browser that creates a csv file from users.txt. The file created is "tools_newsletter_adds.csv", which is located in the same parent folder as the script.

To update the BrandingPays mailing list, download users.txt from the server (in inmotion File Manager, it is in public_html/users), and place it into the folder trunk/bp_utilities (you may need to replace the file that's currently there). Then load localhost/svn/brandingpays/trunk/bp_utilities/create_csv.php in your browser. The new csv file will be located in bp_utilities, ready to upload to mailchimp. Mailchimp will sort out duplicates automatically.









