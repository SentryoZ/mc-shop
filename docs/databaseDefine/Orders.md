## Table Info

Table name: `orders`

Save data about the order of the player

## Columns

| Name           | Type       | Not Null |                              | Note |
|----------------|------------|----------|------------------------------|------|
| id             | bigInteger | true     | PK, Auto increment, unsigned |      |
| cart_id        | bigInteger | true     | unsigned                     |      |
| player_name    | string     | true     |                              |      |
| player_email   | string     | true     |                              |      |
| payment_method | string     | true     |                              |      |
| price_total    | decimal    | true     | unsigned                     |      |
| status         | bigInteger | true     | unsigned                     |      |
| deleted_at     | timestamp  | false    |                              |      |
| created_at     | timestamp  | true     |                              |      |
| updated_at     | timestamp  | false    |                              |      |


