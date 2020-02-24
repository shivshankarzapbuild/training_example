<?php

    class Node{

        function __construct($item){
            $this->key = $item;
            $this->right = null;
            $this->left=null;


        }
    }

    function insert($root,$node){
        if($root ==null){
            $root = $node;
        }else{
                if($root->key<$node->key){
                        if($root->right==null){
                            $root->right=$node;
                        }else{
                            insert($root->right,$node);

                        }
                }
                else{
                    if($root->left==null){
                        $root->left = $node;
                    }else{
                        insert($root->left,$node);
                    }
                }

        }
    }

    function inOrder($root){
            if($root!=null){
                inOrder($root->left);
                echo "$root->key \t";
                inorder($root->right);
            }
    }

    function search($element,$root){
        if($root != null && $root == $element){
            return "Found ";
        }else{
            search($element,$root->left);
            search($element,$root->right);

        }
    }

    $rootNode = new Node(50);
    insert($rootNode,new Node(45));
    insert($rootNode,new Node(151));
    insert($rootNode,new Node(455));
    insert($rootNode,new Node(454));
    insert($rootNode,new Node(4));
    insert($rootNode,new Node(54));
    insert($rootNode,new Node(201));
    insert($rootNode,new Node(124));
    insert($rootNode,new Node(213));
    inOrder($rootNode);
    search(45,$rootNode);


?>