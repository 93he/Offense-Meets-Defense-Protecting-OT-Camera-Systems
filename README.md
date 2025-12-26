Offense Meets Defense: OT Cybersecurity Strategies vs IT Adversary-in-the-Loop

 🎓 University Cybersecurity Project – Educational Only
 
⚠️ Disclaimer:This project is for educational purposes only. It must not be used for real‑world unauthorized access.

---

 📘 Project Summary
This project demonstrates how an IT adversary may attempt to infiltrate an OT environment, and how cybersecurity controls can defend against each stage. It compares offensive attack stages vs defensive security strategies.

---

 🔁 Learning Model – Attack vs Defense
| Attack Stage | Defensive Cybersecurity Control                                                 |
|--------------|--------------------------------                                                 |
| OSINT and phishing to gain first entry | Email security filtering, employee awareness training |
| Passive ARP‑based network mapping      | Network segmentation, ARP inspection, IDS             |
| Accessing OT VLAN and BusyBox‑based cameras | VLAN ACL hardening, firmware updates, MFA        |
| Credential reset through social engineering | Account lockout policies, MFA, SOC monitoring    |

| Attack Stage (IT Adversary)                 | Description                                                  | Defensive Strategy (OT Security)               |
| ------------------------------------------- | ------------------------------------------------------------ | ---------------------------------------------- |
| 1️⃣ OSINT – collect public info             | Gather employee names, domains, emails                       | Reduce data exposure, use email aliases        |
| 2️⃣ Phishing email                          | Fake consultation email to trick employee into clicking link | Email security gateway, staff training         |
| 3️⃣ IP collection via PHP log trick         | PHP script records visitor IPs                               | Web server hardening, disable tracking uploads |
| 4️⃣ Scan open ports – Nmap                  | Example: `nmap -Pn -p 80 <IP>`                               | Firewall filtering, IDS on scanning detection  |
| 5️⃣ Reverse shell access                    | Example: reverse shell via web form                          | Web application sanitization, WAF              |
| 6️⃣ Privilege escalation                    | Gain shell → spawn TTY                                       | Strong internal permissions, logging           |
| 7️⃣ Passive reconnaissance                  | ARP‑a, netdiscover to map network                            | Network segmentation, VLAN ACL, ARP inspection |
| 8️⃣ Target OT cameras (BusyBox)             | IoT camera devices on VLAN 5                                 | Firmware updates, isolated OT network, MFA     |
| 9️⃣ Social engineering to reset credentials | Fake camera company password email                           | Password reset policy, MFA, SOC alerting       |

---

 🧪 Educational Objectives
- Understand the difference between IT and OT networks
- Learn how an attacker may pivot from IT → OT
- Practice designing a hybrid defensive strategy
- Highlight importance of monitoring + employee awareness

---

 📜 License
Educational use only. Unauthorized use against real systems is prohibited.
