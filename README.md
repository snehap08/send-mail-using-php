# PHP Send Mail Project

## Prerequisites

Before you can run this project, you need to have XAMPP installed on your local machine. XAMPP includes Apache, MySQL, and PHP, which are necessary for running the PHP scripts in this project.

## Setup Instructions

1. **Install XAMPP**:
   - Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).

2. **Start Apache Server**:
   - Open the XAMPP Control Panel.
   - Start the Apache server by clicking the "Start" button next to Apache.

3. **Locate the `htdocs` Folder**:
   - Go to the XAMPP installation directory (usually located at `C:\xampp` on Windows or `/Applications/XAMPP` on macOS).
   - Open the `htdocs` folder. This folder is where you will place your project files.

4. **Create a New Folder**:
   - Inside the `htdocs` folder, create a new folder with your name (e.g., `sneha`).

5. **Open the Folder with VS Code**:
   - Right-click on the newly created folder and choose "Open with Code" (if using Visual Studio Code). Alternatively, open VS Code and navigate to the folder.

6. **Copy the Repository**:
   - Clone or copy the contents of this GitHub repository into the newly created folder.

7. **Configure PHP Mail Settings**:
   - Open the PHP file where the mail settings are configured (usually `index.php` or similar).
   - Locate the following lines in the code:
     ```php
     $mail->Username   = '';                     // SMTP username
     $mail->Password   = '';                     // App password
     ```
   - Replace the placeholder values with your actual SMTP credentials.

   **Generating an App Password for Gmail**:
   - Go to [Manage Google Account](https://myaccount.google.com/).
   - Search for "App passwords" in the search bar.
   - Sign in with your Google account if prompted.
   - In the "App passwords" section, select "Mail" as the app and choose your device (e.g., "Windows Computer").
   - Click "Generate" to create an app password.
   - Copy the generated app password.
   - Paste this app password in place of the placeholder in your PHP script under `$mail->Password`.
   - For the `$mail->Username`, enter your Gmail address that you used to generate the app password.

8. **Access the Project**:
   - Open your web browser (e.g., Chrome).
   - Type the following URL in the address bar: `http://localhost/your-folder-name/index.php` (replace `your-folder-name` with the name of the folder you created).

9. **Sending Emails**:
   - Your PHP mail project is now set up and ready to use. You can test sending emails using the provided PHP scripts.

## Notes

- Ensure that your PHP scripts are correctly configured to send emails. You may need to configure your PHP settings in `php.ini` if you encounter any issues with sending emails.
- Make sure that you have a working SMTP server or mail server configured for sending emails from your PHP scripts.

## Troubleshooting

- **Apache Server Not Starting**: Check if another application is using port 80 or 443. You may need to stop the conflicting application or change the port settings in XAMPP.
- **404 Not Found**: Ensure that you have correctly placed the files in the `htdocs` folder and are using the correct URL in your browser.

If you encounter any issues or need further assistance, please refer to the [XAMPP documentation](https://www.apachefriends.org/faq_windows.html) or contact support.
