# XAMPP Router - Localhost Router

## How can you do this?
Paste the files in this repository into the <b>C:\xampp\htdocs</b> folder.

![image](https://github.com/user-attachments/assets/01a331e1-f9f3-4b25-bd27-8d921c5d8a9e)

Change your <b>directory</b> and <b>application name</b> variables in <b>routes\location.php</b>

![code](https://github.com/user-attachments/assets/adc4b48d-eb92-4e9e-a771-a6cb649f55aa)

### What is the point?

When writing page redirects, you can access files directly from the home directory by prefixing the addresses with <b>"/"</b>.

## Example

You visited the redirect <b>"/list"</b> address or a file in it.<br>
This application will allow you to visit <b>"http://localhost/[path]/[application]/list/"</b>.<br>
If you do not use this application, when you want to visit <b>"/list"</b> you will visit <b>"http://localhost/list/"</b>.
