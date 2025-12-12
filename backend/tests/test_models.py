from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from backend.app.core.database import Base
from backend.app.models import User, Program, Beneficiary

SQLALCHEMY_DATABASE_URL = "sqlite:///:memory:"

engine = create_engine(SQLALCHEMY_DATABASE_URL, connect_args={"check_same_thread": False})
SessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=engine)

def test_create_user():
    db = SessionLocal()
    user = User(name="John Doe", email="john.doe@example.com", password="password")
    db.add(user)
    db.commit()
    db.refresh(user)
    assert user.id is not None
    assert user.name == "John Doe"
    db.close()

def test_create_program():
    db = SessionLocal()
    user = User(name="Jane Doe", email="jane.doe@example.com", password="password")
    db.add(user)
    db.commit()
    db.refresh(user)

    program = Program(name="Disaster Relief", description="Helping victims of natural disasters", user_id=user.id)
    db.add(program)
    db.commit()
    db.refresh(program)
    assert program.id is not None
    assert program.name == "Disaster Relief"
    db.close()
