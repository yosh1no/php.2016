; How to specify directories on Unix: forward slash for a separator
; and a colon between the directory names
php_value include_path ".:/usr/local/lib/php/includes"

; How to specify directories on Windows: backslash for a separator
; and a semicolon between the directory names
; Windows: "\path1;\path2"
php_value include_path ".;c:\php\includes"

; Report all errors but notices and coding standards violations
php_value error_reporting "E_ALL & ~E_STRICT"

; Record errors in the error log
php_flag log_errors On

; Don't automatically create variables from form data
php_flag register_globals Off

; An uploaded file can't be more than 2 megabytes
php_value upload_max_filesize 2M

; Sessions expire after 1440 seconds
php_value session.gc_maxlifetime 1440