# 🍽️ Restaurant Management System (Laravel)

A robust and intuitive Web-Based Restaurant Management System built with the Laravel MVC framework. This application streamlines the food ordering process, linking front-of-house staff (Waiters/Users) directly with the back-of-house operations (Kitchen/Admin) in real-time.

---

## 🌐 Live Demo

You can access the live deployment of this project directly through the link below:

🔗 **Live Link:** [http://linlinkyaw.infinityfreeapp.com](http://linlinkyaw.infinityfreeapp.com)

---

## 🔐 Demo Credentials


## 🚀 Tech Stack

### Backend
* **Framework:** Laravel (PHP MVC Framework)
* **Language:** PHP
* **AI Powered:** Supermaven (autocomplete)

### Frontend & UI
* **Admin Template:** AdminLTE v3
* **CSS Framework:** Bootstrap 4
* **Interactions:** jQuery
* **Data Management:** DataTables (Responsive & Searchable Layouts)
* **Key:** Role Base Authentication

---

## 🔐 Demo Credentials

You can test the system using the pre-configured accounts below:

### 👨‍🍳 Kitchen / Admin Panel
* **Email:** `admin@gmail.com`
* **Password:** `admin123`

### 🤵 Waiter / User Panel
* **Email:** `user@gmail.com`
* **Password:** `user123`

---

## ✨ Features Breakdown

### 🎯 Kitchen & Admin Panel (`admin@gmail.com`)

* **Food Item CRUD:** Complete management (Create, Read, Update, Delete) of menu dishes with image uploads.
* **Order Management:** Track live incoming orders from the dining floor.
* **Order Status Lifecycle:** Update order processing states in real-time:
  * 🔄 **Approve:** Accept new incoming orders.
  * 📝 **Edit:** Modify order items if requested.
  *  **Cancel:** Order Cancel.
  * 🍳 **Ready:** Signal the kitchen has finished preparation.
  * ✅ **Done:** Archive completed orders.

### 📋 Waiter & User Panel (`user@gmail.com`)
Designed specifically for floor staff taking orders and serving guests:

* **Table & Food Selection:** select table numbers and choose dishes to create new customer orders.
* **Live Order List:** View Order List.
* **Serve to Customer:** Mark dishes as "Served" once delivered to the table.

---

## 🛠️ Installation & Setup Guide

### Prerequisites
* PHP >= 8.x
* Composer
* MySQL Database

### 1. Clone the Repository
```bash
git clone [https://github.com/linlinkyaw388/restaurant_management_laravel.git](https://github.com/linlinkyaw388/restaurant_management_laravel.git)
cd restaurant_management_laravel
