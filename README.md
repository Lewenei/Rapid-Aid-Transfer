# RapidAidTransfer

RapidAidTransfer is an open-source humanitarian cash-transfer platform designed to help organizations rapidly identify, verify, and directly disburse cash assistance to people affected by disasters like floods, droughts, volcanic eruptions, conflict, or extreme poverty.

The system is built with:
- **FastAPI** (Backend)
- **PostgreSQL + PostGIS** (Database)
- **React Native** (personell frontend)
- **JavaScript** (beneficiary frontend(USSD))
- **Ubuntu + Nginx** (Deployment)
- **M-Pesa / Airtel / MTN Mobile Money** (Easy cash disbursement integrations for various countries)

RapidAidTransfer is designed for small NGOs, startups, and local initiatives to launch cash programs quickly, transparently, and affordably.

---

## 🚀 Key Features

### 🎯 Beneficiary Targeting
- Capture GPS location via the mobile app
- Check eligibility using PostGIS polygons  
- Integrate disaster zones (flood shapefiles, satellite data)

### 💸 Cash Disbursement Engine
- Supports M-Pesa B2C, Airtel Money, MTN MoMo
- Bulk payments or single disbursement
- Automatic payment reconciliation

### 📱 Mobile App for Field Teams
- Offline-first React Native app
- Collect data + GPS + photos
- Sync when internet is available

### 🗂 Admin & Operations
- Manage programs and geofenced areas
- Approve or reject beneficiaries
- Track payment history
- Export data for donors

### 📡 Message Follow-Up
- Send SMS confirmation to beneficiaries
- Track “payment received?” responses (free message??)

### 📊 Transparency & Reporting
- Donor-friendly dashboards (future)
- Public audit logs with anonimized data (future)

---

## 🏗 Tech Stack

| Component | Technology |
|----------|------------|
| Backend  | FastAPI (Python 3.12) |
| Database | PostgreSQL + PostGIS |
| Mobile   | React Native (Expo or CLI) |
| Server   | Ubuntu 22.04 + Nginx |
| Auth     | JWT |
| Payments | M-Pesa, Airtel, MTN APIs |
| Mapping  | GeoAlchemy + PostGIS |

---

## 📁 Project Structure


---

rapidaidtransfer/
├── app/
│   ├── __init__.py
│   ├── main.py                 # FastAPI app instance
│   ├── api/                    # All routers
│   │   ├── __init__.py
│   │   ├── v1/
│   │       ├── __init__.py
│   │       ├── router.py       # includes all v1 endpoints
│   │       ├── auth.py
│   │       ├── users.py
│   │       ├── programs.py
│   │       ├── beneficiaries.py
│   │       ├── disbursements.py
│   │       └── geofence.py
│   ├── core/
│   │   ├── config.py           # settings with Pydantic BaseSettings
│   │   ├── security.py         # JWT utils
│   │   └── database.py         # SQLAlchemy session + engine
│   ├── models/                 # SQLAlchemy models
│   │   ├── __init__.py
│   │   ├── user.py
│   │   ├── program.py
│   │   ├── beneficiary.py
│   │   ├── disbursement.py
│   │   └── geofence.py
│   ├── schemas/                # Pydantic schemas
│   │   ├── __init__.py
│   │   ├── user.py
│   │   ├── program.py
│   │   ├── beneficiary.py
│   │   └── disbursement.py
│   ├── crud/                   # Database operations
│   │   ├── __init__.py
│   │   ├── user.py
│   │   ├── beneficiary.py
│   │   └── disbursement.py
│   ├── utils/
│   │   └── mpesa.py            # M-Pesa B2C wrapper (later)
│   └── dependencies.py         # get_db, get_current_user, etc.
├── alembic/                    # Migrations
├── tests/
│   └── conftest.py
├── .env
├── .gitignore
├── requirements.txt
└── README.md

---

---