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

