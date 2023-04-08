import sys
from email.message import EmailMessage
import smtplib

sender="alexdcs2021@gmail.com"
email = EmailMessage()
email["From"] = sender
email["To"] = sys.argv[1]
email["Subject"] = "ONE TIME PASSWORD"
email.set_content(sys.argv[2])

smtp = smtplib.SMTP_SSL("smtp.gmail.com")
smtp.login(sender, "wuxbpnckyxomyjsq")
smtp.sendmail(sender,sys.argv[1], email.as_string())
smtp.quit()
print("true")