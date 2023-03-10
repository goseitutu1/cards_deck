create table petty_cash_categories
(
    id          INTEGER not null
        primary key autoincrement,
    name        varchar not null,
    code        varchar,
    description varchar,
    created_at  datetime,
    updated_at  datetime,
    deleted_at  datetime
);

