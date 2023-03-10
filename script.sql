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

create table departments
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

create table excuse_duties
(
    id            INTEGER not null
        primary key autoincrement,
    reason        TEXT    not null,
    date_time     datetime,
    status        varchar,
    user_id       INTEGER not null,
    department_id INTEGER not null,
    excuse_id     varchar not null,
    hod_id        INTEGER,
    comment       varchar,
    created_at    datetime,
    updated_at    datetime,
    deleted_at    datetime
);

create table failed_jobs
(
    id         INTEGER not null
        primary key autoincrement,
    uuid       varchar not null,
    connection TEXT    not null,
    queue      TEXT    not null,
    payload    TEXT    not null,
    exception  TEXT    not null,
    failed_at  datetime default CURRENT_TIMESTAMP not null
);

create unique index failed_jobs_uuid_unique
    on failed_jobs (uuid);

create table migrations
(
    id        INTEGER not null
        primary key autoincrement,
    migration varchar not null,
    batch     INTEGER not null
);

create table password_resets
(
    email      varchar not null,
    token      varchar not null,
    created_at datetime
);

create index password_resets_email_index
    on password_resets (email);

create table personal_access_tokens
(
    id             INTEGER not null
        primary key autoincrement,
    tokenable_type varchar not null,
    tokenable_id   INTEGER not null,
    name           varchar not null,
    token          varchar not null,
    abilities      TEXT,
    last_used_at   datetime,
    created_at     datetime,
    updated_at     datetime
);

create unique index personal_access_tokens_token_unique
    on personal_access_tokens (token);

create index personal_access_tokens_tokenable_type_tokenable_id_index
    on personal_access_tokens (tokenable_type, tokenable_id);

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

create table petty_cashes
(
    id                      INTEGER not null
        primary key autoincrement,
    request_id              varchar not null,
    user_id                 INTEGER not null,
    department_id           INTEGER not null,
    reason                  varchar not null,
    hod_status              varchar,
    hod_id                  INTEGER,
    hod_comment             varchar,
    finance_manager_status  varchar,
    finance_manager_id      INTEGER,
    finance_manager_comment varchar,
    amount                  float   not null,
    created_at              datetime,
    updated_at              datetime,
    deleted_at              datetime,
    category_id             INTEGER
);

create table roles
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

create table time_sheets
(
    id            INTEGER not null
        primary key autoincrement,
    tasks         TEXT    not null,
    tasks_date    datetime,
    status        varchar,
    user_id       INTEGER not null,
    department_id INTEGER not null,
    task_id       varchar not null,
    hod_id        INTEGER,
    comment       varchar,
    created_at    datetime,
    updated_at    datetime,
    deleted_at    datetime
);

create table transport_requests
(
    id                      INTEGER not null
        primary key autoincrement,
    request_id              varchar not null,
    created_by              INTEGER not null,
    department_id           INTEGER not null,
    reason                  varchar not null,
    destination             varchar,
    transport_head_id       INTEGER,
    status                  varchar,
    comment                 varchar,
    approved_rejection_date datetime,
    created_at              datetime,
    updated_at              datetime,
    deleted_at              datetime,
    pick_up_date            datetime,
    driver_id               INTEGER,
    vehicle_id              INTEGER
);

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

create table visitor_log_books
(
    id                        INTEGER not null
        primary key autoincrement,
    visitor_full_name         varchar not null,
    visitor_organization_name varchar,
    visitor_phone_number      varchar,
    user_id                   INTEGER not null,
    reason                    varchar,
    created_at                datetime,
    updated_at                datetime,
    deleted_at                datetime,
    time_in                   time,
    time_out                  time
);


