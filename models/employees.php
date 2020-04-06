<?php

function employees_all($link)
{
    $query1 = "SELECT * FROM team ORDER BY id DESC";
    $result1 = mysqli_query($link, $query1);

    if(!$result1)
    {
        die(mysqli_error($link));
    }

    $n = mysqli_num_rows($result1);
    $employees1 = array();

    for($i=0; $i<$n; $i++)
    {
        $row = mysqli_fetch_assoc($result1);
        $employees[] = $row;
    }

    return $employees;
}

function employee_get($link, $id_employee)
{
    $query1 = sprintf("SELECT * FROM team WHERE id='%d'", (int)$id_employee);
    $result1 = mysqli_query($link, $query1);

    if(!$result1)
    {
        die (mysqli_error($link));
    }

    $employee = mysqli_fetch_assoc($result1);

    return $employee;
}

function employees_new($link, $fname, $lname, $position, $avatar)
{
    $fname = trim($fname);
    $lname = trim($lname);
    $position = trim($position);
    $avatar = trim($avatar);

    if($fname == '' || $lname == '' || $position == '')
    {
        return false;
    }

    $t = "INSERT INTO team(fname, lname, position, avatar) VALUES('%s', '%s', '%s', '%s')";

    $query1 = sprintf($t, mysqli_real_escape_string($link, $fname), mysqli_real_escape_string($link, $lname), mysqli_real_escape_string($link, $position), mysqli_real_escape_string($link, $avatar));

    $result1 = mysqli_query($link, $query1);

    if(!$result1)
    {
        die (mysqli_error($link));
    }

    return true;
}

function employees_edit($link, $id1, $fname, $lname, $position, $avatar)
{
    $fname = trim($fname);
    $lname = trim($lname);
    $position = trim($position);
    $avatar = trim($avatar);
    $id1 = (int)$id1;

    if($fname == '' || $lname == '' || $position == '')
    {
        return false;
    }

    $sql1 = "UPDATE team SET fname='%s', lname='%s', position='%s', avatar='%s' WHERE id='%d'";

    $query1 = sprintf($sql1, mysqli_real_escape_string($link, $fname),
    mysqli_real_escape_string($link, $lname),
    mysqli_real_escape_string($link, $position), mysqli_real_escape_string($link, $avatar), 
    $id1);

    $result1 = mysqli_query($link, $query1);

    if(!$result1)
    {
        die(mysqli_error($link));
    }

    return mysqli_affected_rows($link);
}

function employees_delete($link, $id1)
{
    $id1 = (int)$id1;

    if($id1 == 0)
        return false;
    
    $query1 = sprintf("DELETE FROM team WHERE id='%d'", $id1);
    $result1 = mysqli_query($link, $query1);

    if(!$result1)
        die(mysqli_error($link));
    
    return mysqli_affected_rows($link);
}

?>