## Table Info

Table name: `transactions`

Save data about the transaction

## Columns

| Name           | Type       | Not Null |                              | Note               |
|----------------|------------|----------|------------------------------|--------------------|
| id             | bigInteger | true     | PK, Auto increment, unsigned |                    |
| order_id       | bigInteger | true     | FK, unsigned                 | Belong to `orders` |
| user_id        | bigInteger | true     | FK, unsigned                 | Belong to `users`  |
| transaction_id | string     | true     |                              |                    |
| provider_type  | string     | true     |                              |                    |
| amount         | decimal    | true     | unsigned                     |                    |
| customer_id    | string     | true     |                              |                    |
| customer_email | string     | true     |                              |                    |
| customer_name  | string     | true     |                              |                    |
| payment_status | string     | true     |                              |                    |
| status         | integer    | true     | unsigned                     |                    |
| partner_name   | string     | true     |                              |                    |
| memo           | text       | false    |                              |                    |
| deleted_at     | timestamp  | false    |                              |                    |
| created_at     | timestamp  | true     |                              |                    |
| updated_at     | timestamp  | false    |                              |                    |
