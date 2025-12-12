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

── backend
│   ├── app
│   │   ├── core
│   │   ├── __init__.py
│   │   ├── main.py
│   │   ├── models
│   │   └── __pycache__
│   ├── core
│   ├── __init__.py
│   ├── __pycache__
│   │   └── __init__.cpython-312.pyc
│   ├── requirements.txt
│   ├── tests
│   │   ├── conftest.py
│   │   ├── __init__.py
│   │   ├── __pycache__
│   │   ├── test_main.py
│   │   └── test_models.py
│   └── venv
│       ├── bin
│       ├── include
│       ├── lib
│       ├── lib64 -> lib
│       └── pyvenv.cfg
├── frontend
├── pytest.ini
├── README.md
└── venv
    ├── bin
    │   ├── activate
    │   ├── activate.csh
    │   ├── activate.fish
    │   ├── Activate.ps1
    │   ├── alembic
    │   ├── fastapi
    │   ├── httpx
    │   ├── mako-render
    │   ├── pip
    │   ├── pip3
    │   ├── pip3.12
    │   ├── pygmentize
    │   ├── py.test
    │   ├── pytest
    │   ├── python -> python3
    │   ├── python3 -> /usr/bin/python3
    │   ├── python3.12 -> python3
    │   └── uvicorn
    ├── include
    │   ├── python3.12
    │   └── site
    ├── lib
    │   └── python3.12
    ├── lib64 -> lib
    └── pyvenv.cfg