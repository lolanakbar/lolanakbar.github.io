#!/usr/bin/env python3
#// Replace with secure storage (database or encrypted file)
email_ = PHP_REQUEST["email"]
email_file_ = "emails.txt"
#// Basic check for duplicate email (improve for production)
existing_emails_ = php_file_get_contents(email_file_)
if php_strpos(existing_emails_, email_) != False:
    print("Email already exists!")
    sys.exit(0)
# end if
file_ = fopen(email_file_, "a")
#// Open for appending
fwrite(file_, email_ + "\n")
#// Add email with newline character
php_fclose(file_)
print("Email submitted successfully!")
