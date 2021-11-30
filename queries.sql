select contactLastName, SUM(creditLimit) AS totalCredit from customers group by contactLastName;

select * from customers where contactLastName = "andersen";

select contactLastName, count(contactLastName) as totalRepetitions from customers group by contactLastName order by totalRepetitions DESC;

select status from orders group by status;

select country from customers group by country;

select count(*) from orders where shippedDate is null;

select count(*) from orders where shippedDate is not null;

select * from employees;

select * from customers where salesRepEmployeeNumber=1216 AND creditLimit > 100000;

select * from products;
select productLine, count(productLine) as totalRepetitions from products group by productLine;
select avg(newTable.totalRepetitions) from (select productLine, count(productLine) as totalRepetitions from products group by productLine) as newTable;

select count(*) from products where quantityInStock < 500 AND quantityInStock > 100;

select count(*) from orders where shippedDate LIKE '2004-06%' or shippedDate LIKE '2004-07%' or shippedDate LIKE '2004-08%' or shippedDate LIKE '2004-09%' order by shippedDate;

select count(contactLastName) from customers where exists (select lastName from employees where customers.contactLastName = lastName);

select productCode, MAX(buyPrice) from products;
/* NOT WORKING BUT MORE LOGICAL SOMEHOW? */
select productCode from products where buyPrice = MAX(buyPrice);
