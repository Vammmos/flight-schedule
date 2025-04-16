# ✈️ Aircraft Scheduling System

## 📌 Chapter 1: Introduction

### 1.1 Introduction

Flight Scheduling System is a mini web-based project designed to simulate the core functionality of flight scheduling in the aviation sector. Built using **HTML, CSS, JavaScript, PHP**, and a **MySQL backend**, it allows users to schedule flights by selecting aircraft and entering departure and destination details along with date and time.

There are two main modules:
- A scheduling form with validation
- A detailed aircraft info page

JavaScript handles validation, PHP processes the form and stores the data. A confirmation page appears after successful scheduling.

This project is an educational tool to demonstrate full-stack web development, from frontend to backend, simulating a real-world scheduling system.

### 1.2 Objectives
- Create a simple and efficient aircraft scheduling system.
- Enable users to schedule flights online.
- Validate and process data securely.
- Store flight info in a database.
- Design an intuitive user interface.

### 1.3 Purpose
To replace manual scheduling or verbal instructions with a web interface for efficient flight planning and aircraft information display.

### 1.4 Project Scope
- Users can view available aircraft details.
- Users can schedule flights via a form.
- Data is securely stored in a database.
- A confirmation page verifies scheduling.
- Focus on scheduling and displaying aircraft info.

### 1.5 Applicability
- Flight schools and aviation academies
- Small-scale aviation services
- Educational institutions teaching full-stack web development

---

## 🛠️ Chapter 2: Technology Survey and Selection

### Frontend Technologies
- HTML  
- CSS  
- JavaScript  

### Backend Technologies
- PHP  

### Database
- MySQL  

---

## 🧩 Chapter 3: Requirements and Analysis

### 3.1 Problem Definition
Manual aircraft scheduling can cause errors and miscommunication. A digital system is needed to validate inputs and store schedules reliably.

### 3.2 Requirements

#### Functional:
- Dropdown for aircraft selection
- Input for departure and destination
- Submission and confirmation

#### Non-Functional:
- Secure, responsive UI
- Real-time input validation
- Reliable backend processing

### 3.3 Software and Hardware Requirements

**Software:**
- Frontend: HTML, CSS, JS  
- Backend: PHP  
- Database: MySQL  
- Tools: XAMPP, Visual Studio Code

**Hardware:**
- Processor: Intel i5 or above  
- RAM: 4 GB or higher  
- Storage: 250 GB HDD/SSD

### 3.4 Design Document

**ER Diagram:**
![image](https://github.com/user-attachments/assets/824bf568-aef7-4515-81a1-f49471bf3dd4)


---

## 📐 Chapter 4: System Design

**Modules:**
- `index.html` – Main landing page
- `schedule.html` – Flight scheduling form
- `aircraft.html` – Aircraft specifications page
- `insert_flight.php` – Backend logic for scheduling
- `success.html` – Submission confirmation page

---

## 🚀 Chapter 5: Implementation and Testing

### 5.1 Pseudo Code
START
DISPLAY homepage
USER selects "Schedule Flight"
FORM inputs: aircraft, departure, destination, datetime
VALIDATE inputs (JavaScript)
SUBMIT to backend (PHP)
STORE in MySQL
DISPLAY success message
END


---

## ✅ Chapter 6: Result and Discussion

### 6.1 Output Screens
![image](https://github.com/user-attachments/assets/a7915b6f-d727-41f9-853b-30c12550dd8d)


---

## 🧾 Chapter 7: Conclusion

The Aircraft Scheduler is a fully functioning mini-project with a clean interface for scheduling flights. It successfully integrates frontend and backend components. Future enhancements could include:
- User authentication
- Real-time availability
- Analytics dashboard

---

## 🔗 References

- [W3Schools](https://www.w3schools.com)  
- [TutorialsPoint](https://www.tutorialspoint.com)


