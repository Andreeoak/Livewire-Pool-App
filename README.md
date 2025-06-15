# 🗳️ Livewire Voting App

A real-time voting application built with **Laravel 11** and **Livewire 3**, where users can:

- ✅ Create custom polls with multiple options  
- ✅ Vote with real-time updates  
- ✅ See vote counts instantly  
- ✅ Enjoy dynamic form validation — **without writing any JavaScript!**

---

## 🚀 Features

- **🔧 Poll Creation** — Add a title and as many options as you'd like
- **📡 Live Voting** — Votes update immediately using Livewire's reactivity
- **✅ Validation** — Input validation in real-time for cleaner UX
- **🧠 Zero JavaScript** — All interactions are handled with Laravel + Livewire only
- **⚙️ Tailwind CSS** — Simple, responsive, and clean UI

---

## 📷 Screenshots

> ![image](https://github.com/user-attachments/assets/eab19992-5e52-4d73-be0d-818f9625f194)

> ![image](https://github.com/user-attachments/assets/1db41d35-0f06-4c26-ba8d-233c09749d82)
> ![image](https://github.com/user-attachments/assets/5a50702e-8f6f-4559-a77d-7031af65f9e2)



---

## ⚙️ Tech Stack

- PHP 8.2+
- Laravel 11
- Livewire 3
- Tailwind CSS (via CDN)

---

## 🛠️ Installation

```bash
git clone https://github.com/yourusername/livewire-voting-app.git
cd livewire-voting-app
composer install
cp .env.example .env
php artisan key:generate
docker compose up
php artisan migrate
php artisan serve
