def inner_function():
    print("Inside inner_function")
    return 42

def outer_function():
    print("Inside outer_function")
    result = inner_function()
    print("Result from inner_function:", result)
    return result * 2

def main():
    print("Starting main function")
    outer_result = outer_function()
    print("Result from outer_function:", outer_result)
    print("Exiting main function")

if __name__ == "__main__":
    main()
