# 📚 Digital Bookstore System

A full-featured **Laravel-based Digital Bookstore E-commerce Platform** designed for managing online book sales, multi-role administration, sellers, customers, delivery system, wallets, and advanced e-commerce operations.

---

# 🚀 Project Overview

The **Digital Bookstore System** is a scalable multi-vendor e-commerce platform where users can browse, search, and purchase books online.

It includes:
- Complete Admin Panel
- Seller Management System
- Wallet System
- Coupon & Discount System
- Order Processing System
- Delivery Tracking System
- Support Ticket System

---

# 🏗️ Tech Stack

- Backend: Laravel (PHP Framework)
- Database: MySQL
- Frontend: Blade / Bootstrap / JavaScript
- Authentication: Laravel Auth / OAuth
- Payment Integration: Supported via modules
- Architecture: MVC (Modular Enterprise Structure)

---

# 👥 User Roles

- Admin
- Sellers
- Customers
- Delivery Men

---

# 📦 Core Modules

## 🛒 E-Commerce Core
- Product management
- Categories & brands
- Attributes & colors
- Product stocks
- Reviews & wishlists

## 🧑‍💼 User Management
- Admins
- Users
- Sellers
- Delivery men
- Authentication & verification system

## 🛍️ Order System
- Cart management
- Orders & order details
- Order transactions
- Delivery history
- Shipping methods & addresses

## 💰 Wallet System
- Admin wallets & history
- Customer wallets & transactions
- Seller wallets & transactions
- Withdraw requests

## 🎯 Marketing System
- Coupons
- Flash deals
- Deal of the day
- Feature deals
- Banners

## 💬 Communication System
- Chatting system
- Support tickets & conversations
- Notifications
- Contacts

## ⚙️ System Configuration
- Business settings
- Social media links
- Shipping configuration
- Currency management
- Countries & cities
- Translations

---

# 🗃️ Database Structure

## 👤 Admin & User
- admins
- users
- delivery_men
- sellers

## 🛒 Products & Catalog
- products
- categories
- brands
- attributes
- colors
- product_stocks

## 🛍️ Orders & Cart
- carts
- orders
- order_details
- order_transactions
- cart_shippings

## 💳 Wallet & Transactions
- admin_wallets
- admin_wallet_histories
- customer_wallets
- customer_wallet_histories
- seller_wallets
- seller_wallet_histories
- transactions
- withdraw_requests

## 🚚 Shipping & Delivery
- shipping_addresses
- billing_addresses
- shipping_methods
- delivery_histories

## 🎯 Marketing
- coupons
- flash_deals
- flash_deal_products
- deal_of_the_days
- feature_deals
- banners

## 💬 Support & Communication
- chattings
- support_tickets
- support_ticket_convs
- notifications
- contacts

## 🌍 System Settings
- business_settings
- currencies
- countries
- cities
- social_medias
- translations

## 🔐 Authentication & System
- password_resets
- oauth_* tables
- phone_or_email_verifications
- failed_jobs
- migrations
- soft_credentials

---

# ⚙️ Installation Guide

```bash
git clone https://github.com/your-username/digital-bookstore-system.git
cd digital-bookstore-system
composer install
cp .env.example .env
php artisan key:generate

🔧 Configure Database
DB_DATABASE=your_db_name
DB_USERNAME=your_username
DB_PASSWORD=your_password


🗄️ Run Migrations
php artisan migrate


🌱 Seed Database (Optional)
php artisan db:seed


🚀 Start Server
php artisan serve
