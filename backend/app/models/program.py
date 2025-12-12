from sqlalchemy import Column, Integer, String, ForeignKey
from sqlalchemy.orm import relationship
from backend.app.core.database import Base

class Program(Base):
    __tablename__ = "programs"

    id = Column(Integer, primary_key=True, index=True)
    name = Column(String, index=True)
    description = Column(String)

    # Relationship with the User model (if a program has a creator/owner)
    user_id = Column(Integer, ForeignKey('users.id'))

    user = relationship("User", back_populates="programs")
    beneficiaries = relationship("Beneficiary", back_populates="program")
