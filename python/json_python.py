import json

# some JSON:
x = '{ "name":"John", "age":30, "city":"New York"}'

# parse x:
y = json.loads(x)

# the result is a Python dictionary:
print(y)

# convert into JSON:
y = json.dumps(y)

# the result is a JSON string:
print(y)