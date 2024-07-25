import sys
from PyQt5.QtWidgets import *
from PyQt5.QtCore import *
import mysql.connector

class DBHelper:
    def __init__(self):
        self.mydb = mysql.connector.connect(
            host="localhost",
            user="root",
            password="shivani",
            database="sdms"
        )
        self.mycursor = self.mydb.cursor()

    def addStudent(self, sid, name, dept, year, course1, course2, course3):
        query = "INSERT INTO student VALUES (%s, %s, %s, %s, %s, %s, %s)"
        values = (sid, name, dept, year, course1, course2, course3)
        self.mycursor.execute(query, values)
        self.mydb.commit()
        QMessageBox.information(None, "Added", "Student added successfully.")

    def searchStudent(self, sid):
        query = "SELECT * FROM student WHERE sid = %s"
        self.mycursor.execute(query, (sid,))
        result = self.mycursor.fetchone()
        return result

    def deleteStudent(self, sid):
        query = "DELETE FROM student WHERE sid = %s"
        self.mycursor.execute(query, (sid,))
        self.mydb.commit()
        QMessageBox.information(None, "Deleted", "Student deleted successfully.")

    def close(self):
        self.mycursor.close()
        self.mydb.close()

class AddStudentDialog(QDialog):
    def __init__(self, db):
        super().__init__()
        self.db = db
        self.sidInput = QLineEdit()
        self.nameInput = QLineEdit()
        self.yearCombo = QComboBox()
        self.yearCombo.addItems(["1", "2", "3", "4"])
        self.deptCombo = QComboBox()
        self.deptCombo.addItems(["Mechanical", "Chemical", "Computer Science", "Information Technology", "Psychology", "Business"])
        self.course1Combo = QComboBox()
        self.course1Combo.addItems(["Algorithms", "Databases", "Operating Systems", "Java", "Python", "HTML", "CSS", "C++"])
        self.course2Combo = QComboBox()
        self.course2Combo.addItems(["Algorithms", "Databases", "Operating Systems", "Java", "Python", "HTML", "CSS", "C++"])
        self.course3Combo = QComboBox()
        self.course3Combo.addItems(["Algorithms", "Databases", "Operating Systems", "Java", "Python", "HTML", "CSS", "C++"])

        self.addButton = QPushButton("Add")
        self.cancelButton = QPushButton("Cancel")

        layout = QFormLayout()
        layout.addRow("SID", self.sidInput)
        layout.addRow("Name", self.nameInput)
        layout.addRow("Year", self.yearCombo)
        layout.addRow("Department", self.deptCombo)
        layout.addRow("Course 1", self.course1Combo)
        layout.addRow("Course 2", self.course2Combo)
        layout.addRow("Course 3", self.course3Combo)
        layout.addWidget(self.addButton)
        layout.addWidget(self.cancelButton)

        self.setLayout(layout)

        self.addButton.clicked.connect(self.addStudent)
        self.cancelButton.clicked.connect(self.close)

    def addStudent(self):
        sid = int(self.sidInput.text())
        name = self.nameInput.text()
        year = int(self.yearCombo.currentText())
        dept = self.deptCombo.currentText()
        courses = ["Algorithms", "Databases", "Operating Systems", "Java", "Python", "HTML", "CSS", "C++"]  # Update the courses list
        course1 = courses[self.course1Combo.currentIndex()] if self.course1Combo.currentIndex() < len(courses) else ""
        course2 = courses[self.course2Combo.currentIndex()] if self.course2Combo.currentIndex() < len(courses) else ""
        course3 = courses[self.course3Combo.currentIndex()] if self.course3Combo.currentIndex() < len(courses) else ""

        self.db.addStudent(sid, name, dept, year, course1, course2, course3)

class SearchStudentDialog(QDialog):
    def __init__(self, db):
        super().__init__()
        self.db = db
        self.rollInput = QLineEdit()
        self.searchButton = QPushButton("Search")

        layout = QVBoxLayout()
        layout.addWidget(self.rollInput)
        layout.addWidget(self.searchButton)

        self.setLayout(layout)

        self.searchButton.clicked.connect(self.searchStudent)

    def searchStudent(self):
        sid = int(self.rollInput.text())
        student = self.db.searchStudent(sid)

        if student:
            self.populateResult(student)
        else:
            QMessageBox.information(self, "Not Found", "Student not found")

    def populateResult(self, student):
        table = QTableWidget()
        table.setSizeAdjustPolicy(QTableWidget.AdjustToContents)

        table.setRowCount(7)
        table.setColumnCount(2)

        table.setItem(0, 0, QTableWidgetItem("Roll Number"))
        table.setItem(0, 1, QTableWidgetItem(str(student[0])))

        table.setItem(1, 0, QTableWidgetItem("Name"))
        table.setItem(1, 1, QTableWidgetItem(student[1]))

        table.setItem(2, 0, QTableWidgetItem("Department"))
        table.setItem(2, 1, QTableWidgetItem(str(student[2])))

        table.setItem(3, 0, QTableWidgetItem("Year"))
        table.setItem(3, 1, QTableWidgetItem(str(student[3])))

        table.setItem(4, 0, QTableWidgetItem("Course 1"))
        table.setItem(4, 1, QTableWidgetItem(str(student[4])))

        table.setItem(5, 0, QTableWidgetItem("Course 2"))
        table.setItem(5, 1, QTableWidgetItem(str(student[5])))

        table.setItem(6, 0, QTableWidgetItem("Course 3"))
        table.setItem(6, 1, QTableWidgetItem(str(student[6])))

        dialog = QDialog()
        dialog.setLayout(QVBoxLayout())
        dialog.layout().addWidget(table)
        dialog.exec()

class DeleteStudentDialog(QDialog):
    def __init__(self, db):
        super().__init__()
        self.db = db
        self.rollInput = QLineEdit()
        self.deleteButton = QPushButton("Delete")
        self.cancelButton = QPushButton("Cancel")

        layout = QFormLayout()
        layout.addRow("Roll Number", self.rollInput)
        layout.addWidget(self.deleteButton)
        layout.addWidget(self.cancelButton)

        self.setLayout(layout)

        self.deleteButton.clicked.connect(self.deleteStudent)
        self.cancelButton.clicked.connect(self.close)

    def deleteStudent(self):
        sid = int(self.rollInput.text())
        reply = QMessageBox.question(self, "Confirm", "Delete student with roll number " + str(sid) + "?", QMessageBox.Yes | QMessageBox.No)

        if reply == QMessageBox.Yes:
            self.db.deleteStudent(sid)

class MainWindow(QMainWindow):
    def __init__(self, db):
        super().__init__()
        self.db = db
        self.setWindowTitle("Student Database Application")

        menu = self.menuBar()
        studentMenu = menu.addMenu("Student")
        studentMenu.addAction("Add", self.openAddDialog)
        studentMenu.addAction("Search", self.openSearchDialog)
        studentMenu.addAction("Delete", self.openDeleteDialog)

        self.statusBar()
        self.setGeometry(100, 100, 600, 400)

    def openAddDialog(self):
        dialog = AddStudentDialog(self.db)
        dialog.exec()

    def openSearchDialog(self):
        dialog = SearchStudentDialog(self.db)
        dialog.exec()

    def openDeleteDialog(self):
        dialog = DeleteStudentDialog(self.db)
        dialog.exec()

if __name__ == "__main__":
    db = DBHelper()

    app = QApplication(sys.argv)
    window = MainWindow(db)
    window.show()
    app.aboutToQuit.connect(db.close)
    sys.exit(app.exec_())