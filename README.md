# 💬 Real-Time Chat App – Laravel 11 + Reverb + Livewire

A modern real-time chat application built using **Laravel 11**, **Livewire**, **Laravel Reverb**, and **Vite + Tailwind CSS**. This app allows users to send and receive messages instantly using WebSockets.

---

## 🚀 Features

- ✅ Real-time messaging with Laravel Reverb
- ✅ Reactive UI using Livewire (no JS needed!)
- ✅ Authenticated user chat interface
- ✅ Modern frontend with Tailwind CSS and Vite
- ✅ Secure message broadcasting using Laravel channels
- ✅ Clean and minimal design

---

## 🛠️ Tech Stack

| Framework   | Frontend          | Realtime          | Styling        |
|-------------|-------------------|-------------------|----------------|
| Laravel 11  | Livewire          | Laravel Reverb    | Tailwind CSS   |
| PHP         | Blade Components  | WebSockets (Pusher-like) | Vite        |

---

## 📂 Folder Structure

```
/app
/resources
  └── /views
  └── /livewire
/routes
/public
```

---

## 📦 Installation & Run Locally

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/your-username/chatapp-laravel11.git
cd chatapp-laravel11
```

### 2️⃣ Install Dependencies

```bash
composer install
npm install && npm run build
```

### 3️⃣ Create `.env` File

```bash
cp .env.example .env
```

Update the following in your `.env`:

```
APP_NAME=LaravelChatApp
REVERB_APP_ID=local
REVERB_APP_KEY=your-key
REVERB_APP_SECRET=your-secret
REVERB_HOST=127.0.0.1
REVERB_PORT=6001
BROADCAST_DRIVER=reverb
QUEUE_CONNECTION=database
```

### 4️⃣ Run Migrations

```bash
php artisan migrate
```

### 5️⃣ Serve the App

```bash
php artisan serve
```

In another terminal, start Reverb:

```bash
php artisan reverb:start
```

---

## 📸 Screenshots

> (Add your app screenshots here: login page, chat interface, etc.)

---

## 📡 How Real-time Works?

- Laravel Reverb is used as the WebSocket server (like Pusher)
- Livewire components listen to broadcast events
- On new message, UI auto-updates via Livewire listener

---

## 🔒 Security

- Auth middleware protects chat routes
- CSRF protection enabled
- Private broadcasting channels for users

---

## 📄 License

Open-source project — feel free to modify and use!

---

## 🙋‍♂️ Author

**Farhan Ali Shah**  
Connect: [LinkedIn](https://linkedin.com/in/your-profile)  
GitHub: [your-username](https://github.com/your-username)
