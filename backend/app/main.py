from fastapi import FastAPI
from app.core.database import Base, engine
from app.models import user, program, beneficiary

# Create all the tables
Base.metadata.create_all(bind=engine)


app = FastAPI()

@app.get("/")
def read_root():
    return {"message": "Welcome to RapidAidTransfer"}
