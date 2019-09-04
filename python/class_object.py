class Person:
  def __init__(s, n, a):
    s.name = n
    s.age = a

  def myfunc(s):
    print("Hello my name is " +s.name)

  def printname(self):
  	print(self.name, self.age)

# p1 = Person("John", 36)
# p1.myfunc()

# inheritance: Student inherit Person
class Student(Person):
  def __init__(self, n, a, lastname):
  	# Person._init_(abc, n, a)
  	super().__init__(n,a)
  	self.l = lastname
  def printname(self):
  	# override the parent's printname
  	print(self.name, self.age, self.l)


x = Student("Clare", 23, "Chu")
x.printname()




