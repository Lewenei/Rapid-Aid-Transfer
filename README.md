# RapidAidTransfer

**RapidAidTransfer** is an open-source humanitarian cash-transfer platform designed to help organizations rapidly identify, verify, and directly disburse cash assistance to people affected by disasters such as floods, droughts, volcanic eruptions, conflict, or extreme poverty. The platform aims to provide small NGOs, startups, and local initiatives with an affordable and transparent way to launch cash assistance programs.

---

## 🚀 Key Features

- **Beneficiary Targeting**
  - Capture GPS location via the mobile app.
  - Check eligibility using PostGIS polygons.
  - Integrate disaster zones (e.g., flood shapefiles, satellite data).

- **Cash Disbursement Engine**
  - Supports M-Pesa B2C, Airtel Money, MTN MoMo.
  - Bulk payments or single disbursement.
  - Automatic payment reconciliation.

- **Mobile App for Field Teams**
  - Offline-first React Native app.
  - Collect data, GPS coordinates, and photos.
  - Sync data when the internet is available.

- **Admin & Operations**
  - Manage programs and geofenced areas.
  - Approve or reject beneficiaries.
  - Track payment history.
  - Export data for donors.

- **Message Follow-Up**
  - Send SMS confirmations to beneficiaries.
  - Track “payment received?” responses.

- **Transparency & Reporting**
  - Donor-friendly dashboards (Future feature).
  - Public audit logs with anonymized data (Future feature).

---

## 🛠 Tech Stack

| Component            | Technology                                   |
| -------------------- | -------------------------------------------- |
| **Backend**          | Laravel Octane (PHP) with Roadrunner        |
| **Database**         | PostgreSQL + PostGIS                         |
| **Mobile App**       | React Native (Expo or CLI)/React                  |
| **Server**           | Ubuntu 22.04 + Nginx                        |
| **Authentication**   | JWT (JSON Web Tokens)                       |
| **Payments**         | M-Pesa, Airtel, MTN MoMo                    |
| **Mapping**          | GeoAlchemy + PostGIS                        |


