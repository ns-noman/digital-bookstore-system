## 🗄️ Database Structure

### 👤 User & Admin
- admins
- admin_roles
- users
- sellers

### 🛒 Products & Catalog
- products
- product_stocks
- categories
- brands
- attributes
- colors

### 💰 Wallet System
- admin_wallets
- admin_wallet_histories
- customer_wallets
- customer_wallet_histories
- seller_wallets
- seller_wallet_histories
- transactions
- withdraw_requests

### 🛍️ Orders
- carts
- cart_shippings
- orders
- order_details
- order_transactions

### 🚚 Delivery
- delivery_men
- delivery_histories
- shipping_addresses
- shipping_methods

### 🎯 Marketing
- banners
- coupons
- flash_deals
- flash_deal_products
- deal_of_the_days
- feature_deals

### 💬 Communication
- contacts
- chattings
- support_tickets
- support_ticket_convs
- notifications

### 🌍 Settings
- business_settings
- countries
- cities
- currencies
- social_medias

### 🔐 Auth & System
- password_resets
- oauth_clients
- oauth_access_tokens
- oauth_refresh_tokens
- oauth_auth_codes
- oauth_personal_access_tokens
- phone_or_email_verifications
- failed_jobs
- migrations
- translations

### ⭐ Others
- reviews
- wishlists
- search_functions
- paytabs_invoices
- soft_credentials

---

## ⚙️ Installation

```bash
git clone https://github.com/your-repo/book-ecommerce.git
cd book-ecommerce

composer install

cp .env.example .env

php artisan key:generate


🔧 Setup Database
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=

🧱 Run Migrations
php artisan migrate --seed
🚀 Start Server
php artisan serve
🔐 Authentication
Laravel Passport (API Authentication)
Laravel Sanctum (SPA Authentication)
OTP / Email Verification System
💳 Payment Gateways
Stripe
PayPal
Razorpay
Paystack
Nagad
MercadoPago
Custom Invoice System
👨‍💻 Developer Notes
Modular helper-based architecture (app/CPU/)
Wallet-based financial system
Multi-vendor support
Role-based access system
API-ready structure
📌 Author

Nowab Shorif
Software Developer (Laravel | React | CodeIgniter | JavaScript | Node.js | Next.js)