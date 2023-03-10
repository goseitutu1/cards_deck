create table attendances
(
    id                INTEGER not null
        primary key autoincrement,
    staff_id          varchar not null,
    user_id           INTEGER not null,
    phone_mac_address varchar not null,
    clock_in_date     datetime,
    clock_out_date    datetime,
    created_at        datetime,
    updated_at        datetime,
    deleted_at        datetime
);

