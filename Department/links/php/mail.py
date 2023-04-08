import sys
from email.message import EmailMessage
import smtplib

sender="alexdcs2021@gmail.com"
email = EmailMessage()
email["From"] = sender
email["To"] = sys.argv[1]
email["Subject"] = "ONE TIME PASSWORD"
message = sys.argv[2].split('/')
message = ' '.join(message)
email.set_content(message)

smtp = smtplib.SMTP_SSL("smtp.gmail.com")
smtp.login(sender, "wuxbpnckyxomyjsq")
smtp.sendmail(sender,sys.argv[1], email.as_string())
smtp.quit()
print("true")