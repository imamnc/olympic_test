SELECT
    mar_tra_order.id,
    mar_tra_order.created_at,
    mar_tra_order.id,
    mar_mas_customer.name,
    mar_mas_customer.address,
    mar_mas_customer.city,
    mar_mas_customer.province,
    mar_mas_marketplace.store_name,
    mar_mas_expedition.name as expedition_name,
    (SELECT SUM((mar_tra_order_detail.qty * mar_mas_item.price)) FROM mar_tra_order_detail JOIN mar_mas_item ON mar_mas_item.id = mar_tra_order_detail.item_id WHERE order_id = mar_tra_order.id) as total
FROM
    mar_tra_order
    JOIN mar_mas_customer ON mar_mas_customer.id = mar_tra_order.customer_id
    JOIN mar_mas_expedition ON mar_mas_expedition.id = mar_tra_order.expedition_id
    JOIN mar_mas_marketplace ON mar_mas_marketplace.id = mar_tra_order.marketplace_id