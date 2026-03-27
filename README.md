# Design Patterhs With PHP

## Behavioral

<div style="display:flex; flex-wrap:wrap; gap:20px; align-items:center;">

<div style="flex:1; min-width:280px;">

### Chain of Responsibility

The Chain of Responsibility pattern allows a request to pass through a sequence of handlers, where each handler has the opportunity to process the request or delegate it to the next handler in the chain.

Each handler focuses on a single responsibility, promoting separation of concerns and making the system easier to extend and maintain. If a handler cannot fully process the request, it forwards it to the next handler until the request is handled or the chain ends.

In this example, the request flows through a validation pipeline where different handlers perform specific security checks, such as authentication, input sanitization, and protection against common attacks like SQL Injection and XSS, before reaching the final handler that executes the main logic.

</div>

<div style="flex:1; min-width:280px;">

<img src="./docs/chain-flow.png" width="100%">

</div>

</div>

### Strategy

Defines a family of algorithms, encapsulates each one, and makes them interchangeable. The context can switch between strategies at runtime, allowing the behavior of the system to change without modifying the code that uses it.

### Template Method

Defines the skeleton of an algorithm in a base class while allowing subclasses to override specific steps. This ensures a consistent workflow while enabling customization of certain parts of the process.