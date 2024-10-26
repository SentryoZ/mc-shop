## Table Info

Table name: `user_agreements`

Save data about policies, tos, legal documents, etc

## Columns
| Name       | Type       | Not Null |                              | Note |
|------------|------------|----------|------------------------------|------|
| id         | bigInteger | true     | PK, Auto increment, unsigned |      |
| index      | bigInteger | true     | unsigned                     |      |
| type       | bigInteger | true     | unsigned                     |      |
| content    | string     | true     |                              |      |
| deleted_at | timestamp  | false    |                              |      |
| created_at | timestamp  | true     |                              |      |
| updated_at | timestamp  | false    |                              |      |


