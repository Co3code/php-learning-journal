# 🏗️ OOP Abstraction in PHP

## 🔹 1. Definition
**Abstraction** means **defining the structure of a class without implementing all details**.  
It allows you to focus on **what an object should do**, not **how it does it**.

---

## 🔹 2. Key Concepts

| Concept | Meaning |
|---------|---------|
| Abstract Class | A class that **cannot be instantiated** and may contain abstract methods |
| Abstract Method | A method **without implementation** in the abstract class; child classes must define it |
| Interface | Defines a **set of methods a class must implement**, without any code |

---

## 🔹 3. Why Use Abstraction?

✅ Forces a consistent structure across related classes  
✅ Makes code more flexible and easier to extend  
✅ Separates the **“what”** from the **“how”**

---

## 🔹 4. Tips

- Use abstract classes when child classes share some common code  
- Use interfaces when only method signatures are needed  
- Think: *“Define a blueprint; let children fill in the details”*
