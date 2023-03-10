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

