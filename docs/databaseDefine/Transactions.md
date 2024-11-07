## Table Info

Table name: `transactions`

Save data about the transaction

## PayPal Provider

| Name           | Type       | Not Null |                              | Note                 |
|----------------|------------|----------|------------------------------|----------------------|
| id             | bigInteger | true     | PK, Auto increment, unsigned |                      |
| payment_id     | bigInteger | true     | FK, unsigned                 | Belong to `payments` |
| transaction_id | string     | true     |                              |                      |
| customer_id    | string     | true     |                              |                      |
| customer_email | string     | true     |                              |                      |
| payment_method | string     | true     |                              |                      |
| payment_status | string     | true     |                              |                      |
| status         | integer    | true     | unsigned                     |                      |
| partner_name   | string     | true     |                              |                      |
| memo           | text       | false    |                              |                      |
| deleted_at     | timestamp  | false    |                              |                      |
| created_at     | timestamp  | true     |                              |                      |
| updated_at     | timestamp  | false    |                              |                      |


## Swift Provider





## Momo Provider

| Name           | Type       | Not Null |                              | Note                 |
|----------------|------------|----------|------------------------------|----------------------|
| id             | bigInteger | true     | PK, Auto increment, unsigned |                      |
| payment_id     | bigInteger | true     | FK, unsigned                 | Belong to `payments` |
| customer_name  | string     | false    |                              |                      |
| transaction_id | string     | true     |                              |                      |
| partner_code   | string     | true     |                              |                      |
| order_info     | string     | true     |                              |                      |
| request_id     | string     | true     |                              |                      |
| payment_status | string     | true     |                              |                      |
| status         | integer    | true     | unsigned                     |                      |
| signature      | string     | true     |                              |                      |
| deleted_at     | timestamp  | false    |                              |                      |
| created_at     | timestamp  | true     |                              |                      |
| updated_at     | timestamp  | false    |                              |                      |


