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

