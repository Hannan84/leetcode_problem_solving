<?php

//        607. Sales Person
//
//        solution...
//
//        select S.name
//        from SalesPerson as S
//        where S.name not in
//
//        (select S.name from SalesPerson as S, Orders as O, Company C
//        where O.sales_id = S.sales_id and C.com_id = O.com_id and C.name = 'Red')