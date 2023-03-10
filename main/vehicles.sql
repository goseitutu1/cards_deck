create table vehicles
(
    id           INTEGER not null
        primary key autoincrement,
    number_plate varchar not null,
    brand        varchar,
    description  varchar,
    created_at   datetime,
    updated_at   datetime,
    deleted_at   datetime
);

