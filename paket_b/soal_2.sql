SELECT mar_mas_item.name, mar_mas_item.brand, SUM(mar_tra_order_detail.qty) as quantity
FROM
    mar_mas_item
    JOIN mar_tra_order_detail ON mar_tra_order_detail.item_id = mar_mas_item.id
GROUP BY
    mar_mas_item.id
ORDER BY 
    quantity DESC