create table users
(
    id                  INTEGER not null
        primary key autoincrement,
    staff_id            varchar not null,
    first_name          varchar not null,
    last_name           varchar not null,
    department_id       INTEGER not null,
    role_id             INTEGER not null,
    phone_number        varchar not null,
    phone_mac_address   varchar not null,
    email               varchar not null,
    email_verified_at   datetime,
    password            varchar not null,
    remember_token      varchar,
    created_at          datetime,
    updated_at          datetime,
    deleted_at          datetime,
    pc_privilege        varchar,
    transport_privilege varchar,
    is_driver           varchar,
    is_hod              varchar,
    key                 varchar
);

create unique index users_email_unique
    on users (email);

