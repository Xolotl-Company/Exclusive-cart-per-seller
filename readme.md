
# Exclusive Cart per Seller 🛍️🔗  

A **WooCommerce + Dokan** plugin that enables **separate shopping carts per seller**, designed for multivendor marketplaces where buyers need to manage products from different vendors independently.  

## Key Features  
✅ **Seller-Specific Carts**  
Each vendor’s items are added to a dedicated cart, preventing mixed checkouts.  

✅ **Dokan-Compatible**  
Seamlessly integrates with Dokan’s multivendor framework.  

✅ **Flexible Checkout Options**  
Buyers can checkout per seller *or* merge carts (configurable).  

✅ **WooCommerce Native**  
Uses native WooCommerce cart hooks—no complex APIs required.  

✅ **Lightweight & Scalable**  
Optimized for performance on high-traffic marketplaces.  

## Use Cases  
- **Dokan-based marketplaces**  
- B2B platforms with vendor-specific orders  
- Subscription boxes with multi-vendor sourcing  

## Tech Stack  
- PHP (WooCommerce/Dokan hooks)  
- JavaScript/jQuery  
- WordPress  

---

### Screenshots
#### Only products of vendor
![Captura de pantalla 2025-04-28 a la(s) 5 33 35 p m](https://github.com/user-attachments/assets/f33e08ce-34f0-4bb5-a478-f9d47ded5a16) 
#### Restriction of the 2 or more products from diferents vendors
|![Captura de pantalla 2025-04-28 a la(s) 5 34 09 p m](https://github.com/user-attachments/assets/8ab0bf85-6bd9-4fef-b740-9428e9db61a2) |  

---

## Installation

### Prerequisites
- WordPress (5.0+ recommended)
- WooCommerce (5.0+)
- Dokan Multivendor Marketplace (3.0+)

### Method 1: WordPress Admin (Plugin Upload)
1. Download the latest `.zip` file from [Releases](#) (or clone this repo).
2. Go to **WordPress Admin → Plugins → Add New → Upload Plugin**.
3. Select the `.zip` file and click **Install Now**.
4. Activate the plugin **Exclusive Cart per Seller**.

### Method 2: Manual Installation (via FTP/SFTP)
1. Upload the unzipped plugin folder to `/wp-content/plugins/`.
2. Go to **WordPress Admin → Plugins**.
3. Locate **Exclusive Cart per Seller** and click **Activate**.

### Configuration
1. After activation, go to **WooCommerce → Settings → Exclusive Cart** tab.
2. Enable **Per-Seller Cart** and configure checkout options:
   - ☑️ Allow merged checkout  
   - ☑️ Show seller-specific cart notices  
3. Save changes.

### Troubleshooting
- **"Cart not separating"**: Clear WooCommerce cart sessions (`WooCommerce → Status → Tools → Clear cart sessions`).
- **Dokan conflicts**: Ensure Dokan is updated to the latest version.
